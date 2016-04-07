<?php include 'header.php'; ?>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>

    <form action="index.php" method="post" id="calculate_future_value_form">
        
        <input type="hidden" name="action" value="display_results">
        <label>Investment Amount:</label>
        <select name="investment">
            <?php for ($i = 10000; $i <= 50000; $i += 5000) : ?>
            <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
            <?php endfor; ?>            
        </select>
        <br>

        <label>Yearly Interest Rate:</label>
        <select name="interest_rate">
            <?php for ($i = 4; $i <= 12; $i += 0.5 ) : ?>
            <option value ="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
            <?php endfor; ?>            
        </select>
        <br>

        <label>Number of Years:</label>
        <input type="text" name="years"
               value="<?php $years; ?>"><br>
        
        <label>&nbsp;</label>
        <input type="checkbox" name="compound_monthly"> Compound Interest Monthly <br>

        <label>&nbsp;</label>
        <input type="submit" value="Calculate"><br>

    </form>
    </main>
 <?php include 'footer.php'; ?>