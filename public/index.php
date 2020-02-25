

<?php
include('../src/View/header.php');
 ?>

<div class="container">
    <h3>Pokedex</h3>

    <table class="table table-bordered table-hover table-striped">
        <thead style="font-weight: bold">
            <td>#</td>
            <td>Firstname</td>
            <td>Lastname</td>
        </thead>
        <?php /** @var \User\User $user */
        foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user->getId() ?></td>
                <td><?php echo $user->getFirstname() ?></td>
                <td><?php echo $user->getLastname() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include('../src/View/footer.php') ?>

<script>

</script>
