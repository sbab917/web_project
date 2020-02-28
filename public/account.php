<?php include('../src/View/header.php') ?>

<div class="container">

  <form method="post" id="search">
    <input type="text" name="name" id="name">
    <button type="submit">Valider</button>
  </form>
    <div id="printresult">
      <h3>Résultat</h3>
      <table class="table table-striped table-sm table-bordered table-hover" id="table-print">
        <thead>
          <tr>
            <th data-name="id">#</th>
            <th data-name="login">Nom</th>
            <th data-name="mdp">Nom</th>
          </tr>
        </thead>
      </table>
    </div>

</div>

<?php include('../src/View/footer.php') ?>

<script type="text/javascript">

$(document).ready(function () {
  var dt = $("#table-print").DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": {
      "url": "ApplicationController.php",
      data: function (d) {
        d.name = $("#name").val();
        d.action = "search";
        return d;
      },
      "type": "POST"
    },
    "columns": [
      {"data": "id"},
      {"data": "login"},
      {"data": "mdp"}
    ],
    "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Tous"]],
    "pageLength": 25
  });

  $("#search").on("submit", function () {
    dt.ajax.reload(null, false);
    return false;
  });
});
</script>
