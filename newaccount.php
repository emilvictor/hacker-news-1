<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/sections/header.php'; ?>
<?php alerts(); ?>
<article>
    <h1>Create a new account</h1>

    <form action="/app/users/register.php" method="post">
        <div class="form-group">
            <label for="new-email">Email</label>
            <input class="form-control" type="email" name="new-email" id="email" value="<?= registerEmail(); ?>" required>
            <small class="form-text">Please provide an email address.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="new-username">Username</label>
            <input class="form-control" type="username" name="new-username" id="username" value="<?= registerUsername(); ?>" required>
            <small class="form-text">Please choose a username.</small>
        </div>

        <div class="form-group">
            <label for="new-password-1">Password</label>
            <input class="form-control" type="password" name="new-password-1" id="password" value="<?= registerPassword(); ?>" required>
            <small class="form-text">Please choose a password.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="new-password-2">Confirm your password</label>
            <input class="form-control" type="password" name="new-password-2" id="password" value="<?= registerConfirm(); ?>" required>
            <small class="form-text">Please confirm your password.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="new-bio">Biography</label>
            <textarea class="form-control" rows="3" name="new-bio" id="bio" value="<?= registerBio(); ?>"></textarea>
            <small class="form-text">Tell us something about yourself! You can update your profile later.</small>
            <button type="submit" class="btn btn-dark post-div-button">Create account</button>
        </div><!-- /form-group -->
    </form>
</article>

<?php require __DIR__ . '/sections/footer.php'; ?>