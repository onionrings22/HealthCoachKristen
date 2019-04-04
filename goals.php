<?php
$thisPage = "goals";
include_once("header.php");
include_once("Dao.php");

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    die();
}
$dao = new Dao();
$goals = $dao->getGoalsIP($_SESSION["user"]["username"]);
$completed = $dao->getGoalsC($_SESSION["user"]["username"]);
?>
<h1>My Goals</h1>
<div>
    <h3>Current Goals</h3>
    <ul class="goals">
        <?php
        foreach($goals as $goal) {
            echo '<li>' . $goal["goal_text"] . '</li>';
        }
        ?>
    </ul>
</div>
<?php
if ($completed) {
    echo '<div>
    <h3>Completed Goals</h3>
    <ul class="goals">';
    foreach($completed as $goal) {
        echo '<li>' . $goal["goal_text"] . '</li>';
    }
    echo '    </ul>
</div>';
}
?>
<h1>Profile Info</h1>
<div>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $_SESSION["user"]["name"]; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_SESSION["user"]["email"]; ?></td>
        </tr>
        <tr>
            <td>Height</td>
            <td><?php echo $_SESSION["user"]["height"] . ' inches'; ?></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><?php echo $_SESSION["user"]["weight"] . ' lbs'; ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php echo $_SESSION["user"]["age"] . ' years young'; ?></td>
        </tr>
        <tr>
            <td>Exercise Frequency</td>
            <td><?php echo $_SESSION["user"]["exercise_frequency"] . ' times per week'; ?></td>
        </tr>
    </table>
</div>
<img src="img/habits.jpg" height="300" class="bottom-img">
<?php
include_once ("footer.html");
