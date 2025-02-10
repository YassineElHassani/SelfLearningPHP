<?php 
///                                             Encapsulation

class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        echo "Deposit: " . $amount . "\n";
        return "Balance: " . $this->balance += $amount;
    }

    public function withdraw($amount) {
        echo "Withdraw: " . $amount . "\n";
        return "Balance: " . $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance . "\n";
    }
}

$show = new BankAccount(100);

echo $show->deposit(50) . "\n";
echo $show->withdraw(120) . "\n\n";
echo "Balance: " . $show->getBalance();



///                                             Abstraction


