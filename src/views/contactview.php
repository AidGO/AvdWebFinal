<form method ="post">
    <label for="name">
        Name:
    </label>
    <input type="text"
        id="name"
        name="name"
        placeholder="Enter your Name" required>
    <label for="email">
            E-mail:
    </label>
    <input type="email"
        id="email"
        name="email"
        placeholder="Enter your E-mail" required>
    <button type="submit">
        Submit
    </button>
    <br>
    <br>
    <label for="content">
        Message Me:
    </label>
    <textarea id="message"
        name="message" 
        rows="4" 
        style ="width: 100%" 
        maxlength="600" 
        required
        placeholder="600 characters max"></textarea>
</form>