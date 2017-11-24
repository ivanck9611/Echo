<?php if (isset($_SESSION['success'])): ?>
                <div class="error success">
                    <h3>
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
<?php endif ?>

<?php if (isset($_SESSION["username"])): ?>
<p>Welcome</p><?php echo $_SESSION['username']; ?></p>
<?php endif; ?>

