<?php include 'header.php'; ?>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
        
        <label>Compound Monthly:</label>
        <span><?php echo $is_monthly_f; ?></span><br>
    </main>
<?php include 'footer.php'; ?>