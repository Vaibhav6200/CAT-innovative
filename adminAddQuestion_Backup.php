    <?php
        if($_SESSION['admin']){
        echo '<div class="add_ques"><form method="post" action="add_ques.php">
                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question" required><br>

                    <label for="option1">Option 1:</label><br>
                    <input type="text" id="option1" name="option1" required><br>

                    <label for="option2">Option 2:</label><br>
                    <input type="text" id="option2" name="option2" required><br>

                    <label for="option3">Option 3:</label><br>
                    <input type="text" id="option3" name="option3" required><br>

                    <label for="option4">Option 4:</label><br>
                    <input type="text" id="option4" name="option4" required><br>

                    <label for="answer">Correct Answer:</label><br>
                    <select id="answer" name="answer" required>
                        <option value="">--Select Answer--</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select><br>

                    <input type="submit" value="Submit">
                    </form></div>';
        }
    ?>
