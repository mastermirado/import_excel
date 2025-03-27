<?php

namespace App\Entity;

use App\Repository\ImportRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use PhpOffice\PhpSpreadsheet\Shared\Date;

#[ORM\Entity(repositoryClass: ImportRepository::class)]
class Import
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $businessAccount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eventAccount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastEventAccount = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $fileNumber = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $currentVehicleOwner = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $street = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $addressSupplement = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $zip = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $homePhone = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $mobilePhone = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $workPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $firstRegistrationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $purchaseDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastEventDate = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $mark = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $model = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $registration = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prospectType = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $miles = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $energy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sellerVN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sellerVO = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $invoiceComment = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $typeVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fileNumberVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $salesIntermediary = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eventDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eventOrigin = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBusinessAccount(): ?string
    {
        return $this->businessAccount;
    }

    public function setBusinessAccount($businessAccount): static
    {
        $this->businessAccount = $businessAccount;

        return $this;
    }

    public function getEventAccount(): ?string
    {
        return $this->eventAccount;
    }

    public function setEventAccount($eventAccount): static
    {
        $this->eventAccount = $eventAccount;

        return $this;
    }

    public function getLastEventAccount(): ?string
    {
        return $this->lastEventAccount;
    }

    public function setLastEventAccount($lastEventAccount): static
    {
        $this->lastEventAccount = $lastEventAccount;

        return $this;
    }

    public function getFileNumber(): ?string
    {
        return $this->fileNumber;
    }

    public function setFileNumber($fileNumber): static
    {
        $this->fileNumber = $fileNumber;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCurrentVehicleOwner(): ?string
    {
        return $this->currentVehicleOwner;
    }

    public function setCurrentVehicleOwner($currentVehicleOwner = null): static
    {
        $this->currentVehicleOwner = $currentVehicleOwner ?? '';

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname($lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname($firstname = ''): static
    {
        $this->firstname = $firstname ?? '';

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function getAddressSupplement(): ?string
    {
        return $this->addressSupplement;
    }

    public function setAddressSupplement(?string $addressSupplement): static
    {
        $this->addressSupplement = $addressSupplement;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): static
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity($city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    public function setHomePhone(?string $homePhone): static
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): static
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    public function getWorkPhone(): ?string
    {
        return $this->workPhone;
    }

    public function setWorkPhone(?string $workPhone): static
    {
        $this->workPhone = $workPhone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail($email = ''): static
    {
        $this->email = $email ?? '';

        return $this;
    }

    public function getFirstRegistrationDate(): ?\DateTimeInterface
    {
        return $this->firstRegistrationDate;
    }

    public function setFirstRegistrationDate($firstRegistrationDate): static
    {
        $this->firstRegistrationDate = $this->getDate($firstRegistrationDate);

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate($purchaseDate = null): static
    {
        $this->purchaseDate = $this->getDate($purchaseDate);

        return $this;
    }

    public function getLastEventDate(): ?\DateTimeInterface
    {
        return $this->lastEventDate;
    }

    public function setLastEventDate($lastEventDate): static
    {
        $this->lastEventDate = $this->getDate($lastEventDate);

        return $this;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark($mark): static
    {
        $this->mark = $mark;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel($model = ''): static
    {
        $this->model = $model ?? '';

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion($version): static
    {
        $this->version = $version ?? '';

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin($vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration($registration): static
    {
        $this->registration = $registration;

        return $this;
    }

    public function getProspectType(): ?string
    {
        return $this->prospectType;
    }

    public function setProspectType($prospectType): static
    {
        $this->prospectType = $prospectType;

        return $this;
    }

    public function getMiles(): ?string
    {
        return $this->miles;
    }

    public function setMiles($miles): static
    {
        $this->miles = $miles;

        return $this;
    }

    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    public function setEnergy($energy): static
    {
        $this->energy = $energy ?? '';

        return $this;
    }

    public function getSellerVN(): ?string
    {
        return $this->sellerVN;
    }

    public function setSellerVN($sellerVN = null): static
    {
        $this->sellerVN = $sellerVN ?? '';

        return $this;
    }

    public function getSellerVO(): ?string
    {
        return $this->sellerVO;
    }

    public function setSellerVO($sellerVO = null): static
    {
        $this->sellerVO = $sellerVO ?? '';

        return $this;
    }

    public function getInvoiceComment(): ?string
    {
        return $this->invoiceComment;
    }

    public function setInvoiceComment(?string $invoiceComment): static
    {
        $this->invoiceComment = $invoiceComment;

        return $this;
    }

    public function getTypeVNVO(): ?string
    {
        return $this->typeVNVO;
    }

    public function setTypeVNVO($typeVNVO): static
    {
        $this->typeVNVO = $typeVNVO ?? '';

        return $this;
    }

    public function getSalesIntermediary(): ?string
    {
        return $this->salesIntermediary;
    }

    public function setSalesIntermediary(?string $salesIntermediary): static
    {
        $this->salesIntermediary = $salesIntermediary;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->eventDate;
    }

    public function setEventDate($eventDate = null): static
    {
        $this->eventDate = $this->getDate($eventDate);

        return $this;
    }

    public function getEventOrigin(): ?\DateTimeInterface
    {
        return $this->eventOrigin;
    }

    public function setEventOrigin($eventOrigin): static
    {
        $this->eventOrigin = $eventOrigin;

        return $this;
    }

    public function getDate($value){
        if(!$value){
            return null;
        }

        return new DateTime(Date::excelToDateTimeObject($value)->format('Y-m-d H:i:s'));
    }

    public function getFileNumberVNVO(): ?string
    {
        return $this->fileNumberVNVO;
    }

    public function setFileNumberVNVO(?string $fileNumberVNVO): static
    {
        $this->fileNumberVNVO = $fileNumberVNVO;

        return $this;
    }
}
