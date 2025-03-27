<?php

namespace App\Controller;

use App\Form\ImportType;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use App\Services\ImportService;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Row;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImportController extends AbstractController
{
    /**
     * @Route("/import", name="import")
     */
    public function import(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ImportType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('file')->getData();

            if ($file) {
                $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads/';
                $filename = uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move($uploadsDir, $filename);

                    // read file
                    $spreadsheet = IOFactory::load($uploadsDir . $filename);
                    $sheet = $spreadsheet->getActiveSheet();

                    foreach ($sheet->getRowIterator() as $row) {
                        if($row instanceof Row && $row->getRowIndex() > 1){
                            $cells = [];
                            foreach ($row->getCellIterator() as $cell) {
                                $cells[] = $cell->getValue();
                            }
                            $import = ImportService::makeImportEntity($cells);

                            try {
                                $em->persist($import);
                                $em->flush();
                            }catch(\Exception $e){
                                $this->addFlash('danger', 'An error occured when saving data');
                                return $this->redirectToRoute('import');
                            }
                        }
                    }
                } catch (Exception $e) {
                    $this->addFlash('danger', 'Unabled to upload file');
                    return $this->redirectToRoute('import');
                }

                $this->addFlash('success', 'Data imported successfully');
                return $this->redirectToRoute('import');
            }
        }

        return $this->render('import/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
