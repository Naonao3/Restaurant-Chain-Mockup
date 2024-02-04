<?php

namespace Models\RestaurantLocations;

use Interfaces\FileConvertertible;

class RestaurantLocation implements FileConvertertible{
    private string $name;
    private string $address;
    private string $city;
    private string $state;
    private string $zipCode;
    private array $employees;
    private bool $isOpen;
    private bool $hasDriveThru;

    public function __construct(
        string $name,
        string $address,
        string $city,
        string $state,
        string $zipCode,
        array $employees,
        bool $isOpen,
        bool $hasDriveThru
    )
    {
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->employees = $employees;
        $this->isOpen = $isOpen;
        $this->hasDriveThru = $hasDriveThru;        
    }

    public function toString(): string{
        return sprintf(
            "
            Name: %s\n
            Address: %s\n
            City: %s\n
            State: %s\n
            Zip Code: %s\n
            Employees: %s\n
            Open: %s\n
            Drive-Through: %s\n
            ",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
            $this->employees,
            $this->isOpen ? 'Yes' : 'No',
            $this->hasDriveThru ? 'Yes' : 'No'
        );
    }

    public function toHTML(): string{
        return sprintf("
            <div class='card'>
                <div class='avator'>SAMPLE</div>
                <h2>%s</h2>
                <p>Address: %s</p>
                <p>City: %s</p>
                <p>State: %s</p>
                <p>Zip Code: %s<p>
                <p>Employees: %s</p>
                <p>Open: %s</p>
                <p>Drive-Through: %s</p>
            </div>",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode,
            $this->employees,
            $this->isOpen ? 'Yes' : 'No',
            $this->hasDriveThru ? 'Yes' : 'No'
        );
    }

    public function toMarkdown(): string{
        return "## Name: {$this->name} 
                 - Address: {$this->address} 
                 - City: {$this->city} 
                 - State: {$this->state} 
                 - Zip Code: {$this->zipCode} 
                 - Employees: {$this->employees} 
                 - Open: {$this->isOpen} 
                 - Drive-Through: {$this->hasDriveThru}";
    }

    public function toArray(): array{
        return [
            "name" => $this->name,
            "address" => $this->address,
            "city" => $this->city,
            "state" => $this->state,
            "zipCode" => $this->zipCode,
            "employees" => $this->employees,
            "isOpen" => $this->isOpen,
            "hasDriveThru" => $this->hasDriveThru
        ];        
    }
}

?>