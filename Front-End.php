<html>

<head>
    <title>
        Calculator And Marksheet
    </title>
</head>

<body>
    <center>
        <form method="POST" action="page2.php">
            <h2>Marksheet </h2>
            <div>

                <label>Subject1</label>
                <input type="number" autofocus name="subject1" placeholder="Insert Marks" required />
                <br />
                <br />
                <label>Subject2</label>
                <input type="number" autofocus name="subject2" placeholder="Insert Marks" required />
                <br />
                <br />
                <label>Subject3</label>
                <input type="number" autofocus name="subject3" placeholder="Insert Marks" required />
                <br />
                <br />
                <label>Subject4</label>
                <input type="number" autofocus name="subject4" placeholder="Insert Marks" required />
                <br />
                <br />
                <label>Subject5</label>
                <input type="number" autofocus name="subject5" placeholder="Insert Marks" required />
                <br />
                <br />
                <input type="submit" autofocus name="submit" value="result" />
            </div>

        </form>
    </center>

    <center>
        <form action="page2.php" method="POST">
            <hr />
            <div>
                <h2>Calculator</h2>
                <label>Number 1</label>
                <input type="number" name="number1" placeholder="Enter your number" autofocus required />
                <br />
                <br />
                <label>Number 2</label>
                <input type="number" name="number2" placeholder="Enter your number" required autofocus />
                </br>
                </br>
                <Label> Operations:</Label>
                <input type="submit" name="addition" value="+" />
                <input type="submit" name="subtraction" value="-" />
                <input type="submit" name="multiplication" value="x" />
                <input type="submit" name="division" value="/" />

            </div>
        </form>
    </center>

</body>

</html>