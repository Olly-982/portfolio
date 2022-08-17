<?php include "./partials/head.php" ?>
<?php include "./partials/headerNav.php" ?>
<?php $success = $_GET["success"]; ?>
<style>
    .theme-wrapper {
        overflow-y: scroll;
    }
</style>
<div class="contact-wrapper">
    <form id="contact-form" class="" method="post" action="form-process.php">
        <?php if ($success) echo "<p class='success' style='font-size: 2em; color: limegreen; margin-top: 3em;'>Thanks for getting in touch! I will get back to you as soon as possible.</p>" ?>
        <div class="contact-details-wrap">
            <div class="input-wrap">
                <label class="text-el" for="Name">Enter your name: </label>
                <input autofocus class="form-input" type="text" name="Name" id="Name" minlength="2" required>
            </div>
            <div class="input-wrap">
                <label class="text-el" for="Email">Enter your email: </label>
                <input class="form-input" type="email" name="Email" id="Email" required>
            </div>
        </div>
        <div class="message input-wrap">
            <label class="text-el" for="Message">Let me know how I can help you: </label>
            <textarea name="Message" id="Message" cols="30" rows="10" maxlength="1000" required></textarea>
        </div>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>
</main>
<footer></footer>
<canvas id="vizzy"></canvas>
</div>
</body>

</html>