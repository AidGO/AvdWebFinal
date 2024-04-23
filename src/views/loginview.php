<h1>Hello, PLEASE LOGIN</h1>
<h3>Enter your login credentials</h3>
<form method ="post">
    <label for="first">
            Username:
        </label>
    <input type="text"
            id="first"
            name="first"
            placeholder="Enter your Username" required>

    <label for="password">
            Password:
        </label>
    <input type="password"
            id="password"
            name="password"
            placeholder="Enter your Password" required>

        <button type="submit">
            Submit
        </button>
</form>
<?php include_once('footerview.php')?>