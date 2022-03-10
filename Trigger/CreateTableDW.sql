CREATE TABLE Deposit (
    Tran_No INT AUTO_INCREMENT NOT NULL,
    ACC_No VARCHAR(20) NOT NULL,
    DateOp DateTime NOT NULL,
    Amount FLOAT NOT NULL,
    PRIMARY KEY (Tran_No),
    FOREIGN KEY(ACC_No) REFERENCES Account(ACC_No)
)Engine=InnoDB;

CREATE TABLE Withdraw (
    Tran_No INT AUTO_INCREMENT NOT NULL,
    ACC_No VARCHAR(20) NOT NULL,
    DateOp DateTime NOT NULL,
    Amount FLOAT NOT NULL,
    PRIMARY KEY (Tran_No),
    FOREIGN KEY(ACC_No) REFERENCES Account(ACC_No)
)Engine=InnoDB;