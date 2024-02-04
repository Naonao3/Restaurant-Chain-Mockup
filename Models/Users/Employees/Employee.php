<?php 

namespace Models\Users\Employees;

use DateTime;
use Interfaces\FileConvertertible;
use Models\Users\User;

class Employee extends User implements FileConvertertible{ 
    private string $jobTitle;
    private float $salary;
    private DateTime $startDate;
    private array $awards;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $phoneNumber,
        string $address,
        DateTime $birthDate,
        DateTime $membershipExpirationDate,
        string $role,
        string $jobTitle,
        float $salary,
        DateTime $startDate,
        array $awards
    )
    {
        parent::__construct(
            $id,
            $firstName,
            $lastName,
            $email,
            $password,
            $phoneNumber,
            $address,
            $birthDate,
            $membershipExpirationDate,
            $role
        );
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
        $this->startDate = $startDate;
        $this->awards = $awards;        
    }

    public function toString():string{
        return sprintf(
            "Job Title: %d\n
             Salary: %d\n
             Start Date: %d\n
             Awards: %\n",
            $this->jobTitle,
            $this->salary,
            $this->startDate,
            $this->awards
        );
    }

    public function toHTML():string{
        return sprintf("
            <p>Job Title: %s</p>
            <p>Salary: %s</p>
            <p>Start Date: %s</p>
            <p>Awards: %s</p>
            ",
            $this->jobTitle,
            $this->salary,
            $this->startDate,
            $this->awards
        );
    }

    public function toMarkdown(): string{
        return "- Job Title: {$this->jobTitle}
                - Salary: {$this->salary}
                - Start Date: {$this->startDate}
                - Awards: {$this->awards}";        
    }

    public function toArray(): array{
        return [
            "Job Title" => $this->jobTitle,
            "Salary" => $this->salary,
            "Start Date" => $this->startDate,
            "Awards" => $this->awards
        ];
    }

}

?>