<?php

namespace Models\Companies\RestaurantChains;

use Interfaces\FileConvertertible;
use Models\Companies\Company;

class RestaurantChain extends Company implements FileConvertertible{
    private int $chainId;
    private array $restaurantLocation;
    private string $cuisineType;
    private int $numberOfLocations;
    private string $parentCompany;

    public function __construct(
        string $name,
        int $foundingYear,
        string $description,
        string $website,
        string $phone,
        string $industry,
        string $ceo,
        bool $isPubliclyTraded,
        string $country,
        string $founder,
        int $totalEmployees,
        int $chainId,
        array $restaurantLocation,
        string $cuisineType,
        int $numberOfLocations,
        string $parentCompany
    )
    {
        parent::__construct(
            $name,
            $foundingYear,
            $description,
            $website,
            $phone,
            $industry,
            $ceo,
            $isPubliclyTraded,
            $country,
            $founder,
            $totalEmployees
        );
        $this->chainId = $chainId;
        $this->restaurantLocation = $restaurantLocation;
        $this->cuisineType = $cuisineType;
        $this->numberOfLocations = $numberOfLocations;
        $this->parentCompany = $parentCompany;        
    }

    public function toString(): string{
        return sprintf(
            "Chain ID: %s\n
             Restaurant Location: %s\n
             Number Of Locations: %d\n
             Parent Cmpany: %s\n",
            $this->chainId,
            $this->restaurantLocation,
            $this->numberOfLocations,
            $this->parentCompany
        );        
    }

    public function toHTML(): string{
        return sprintf(
            "
            <p>Chain ID: %s</p>
            <p>Restaurant Location: %s</p>
            <p>Number Of Locations: %d</p>
            <p>Parent Company: %s</p>
            ",
            $this->chainId,
            $this->restaurantLocation,
            $this->numberOfLocations,
            $this->parentCompany
        );        
    }

    public function toMarkdown(): string{
        return " - Chain Id: {$this->chainId} 
                 - Restaurant Location: {$this->restaurantLocation} 
                 - Number Of Location: {$this->numberOfLocations} 
                 - Parent Company: {$this->parentCompany}";    
    }

    public function toArray(): array{
        return [
            "chainId" => $this->chainId,
            "restaurantLocation" => $this->restaurantLocation,
            "numberOfLocations" => $this->numberOfLocations,
            "parentCompany" => $this->parentCompany
        ];
    }
}

?>