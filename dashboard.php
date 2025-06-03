<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css\dashboardstyle.css">
</head>

<style>

    body{
        background: #dadada;
    }

    #registerbtn, #logoutbtn{
    color: rgb(255, 255, 255);
    transition: .4s all;
    }

    #registerbtn:hover{
        transform: scale(1.2);
    }

    #logoutbtn:hover{
        transform: scale(1.2);
    }

    .nav-link{
        color: white;
    }

    .input-group .form-control:focus {
        border-color: #00b4d8;
        box-shadow: none;
    }

    .input-group-text {
        cursor: pointer;
    }

</style>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php"><h3><i class="fa fa-users"></i> STUDENTS DETAILS</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <!-- Search Bar -->
        <li class="nav-item">
          <div class="input-group shadow-sm" style="border-radius: 25px; margin-right: 250px; margin-left: -260px;">
            <input type="text" class="form-control border-0" id="searchInput" placeholder="Search by Name or NIC" style="border-radius: 25px 0 0 25px; outline: none;">
            <span class="input-group-text bg-white border-0" style="border-radius: 0 25px 25px 0;">
              <i class="fa fa-search text-muted"></i>
            </span>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="user"><i class="fa fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?></a>
        </li>
        <li class="nav-item">
          <a id="registerbtn" class="registerbtn btn btn-outline-info mx-4" role="button" data-bs-toggle="modal" data-bs-target="#registermodal"><i class="fa fa-user-plus"></i> Student Register</a>
        </li>
        <li class="nav-item">
          <a id="logoutbtn" class="btn btn-outline-info mx-2" href="home.php" role="button"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- REGISTER POP UP FORM -->
<div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="registerLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="register.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="Rname" class="form-label">Full Name</label>
            <input type="text" name="name" id="Rname" class="form-control shadow-sm border-primary" placeholder="Enter Full Name" required>
          </div>
          <div class="mb-3">
            <label for="Rnic" class="form-label">NIC</label>
            <input type="text" name="nic" id="Rnic" class="form-control shadow-sm border-primary" placeholder="Enter NIC No" required>
          </div>
          <div class="mb-3">
            <label for="Raddress" class="form-label">Address</label>
            <input type="text" name="address" id="Raddress" class="form-control shadow-sm border-primary" placeholder="Enter Address">
          </div>
          <div class="mb-3">
            <label for="Rdistrict" class="form-label">District</label>
            <select name="district" id="Rdistrict" class="form-select shadow-sm border-primary">
              <option value="" disabled selected>District</option>
              <option>Gampaha</option>
              <option>Kurunagala</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="Rnumber" class="form-label">Phone Number</label>
            <input type="text" name="number" id="Rnumber" class="form-control shadow-sm border-primary" placeholder="Enter Phone Number">
          </div>
          <div class="mb-3">
            <label for="Rcourse" class="form-label">Course</label>
            <select name="course" id="Rcourse" class="form-select shadow-sm border-primary">
              <option value="" disabled selected>Select Course</option>
              <option>DIPLOMA IN INFORMATION & COMMUNICATION TECHNOLOGY</option>
              <option>DIPLOMA IN HUMAN RESOURCE MANAGEMENT</option>
              <option>DIPLOMA IN BUSINESS MANAGEMENT</option>
              <option>DIPLOMA IN PSYCHOLOGY & COUNSELLING</option>
              <option>DIPLOMA IN ENGLISH LANGUAGE</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- EDIT POP UP FORM -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="editLabel">Edit Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="updateData.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control shadow-sm border-success" placeholder="Enter Full Name">
          </div>
          <div class="mb-3">
            <label for="nic" class="form-label">NIC</label>
            <input type="text" name="nic" id="nic" class="form-control shadow-sm border-success" placeholder="Enter NIC No" readonly>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control shadow-sm border-success" placeholder="Enter Address">
          </div>
          <div class="mb-3">
            <label for="district" class="form-label">District</label>
            <input type="text" name="district" id="district" class="form-control shadow-sm border-success" placeholder="Enter District">
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Phone Number</label>
            <input type="text" name="number" id="number" class="form-control shadow-sm border-success" placeholder="Enter Phone Number">
          </div>
          <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <input type="text" name="course" id="course" class="form-control shadow-sm border-success" placeholder="Enter Course">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="updatedata" class="btn btn-success">Update Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- DELETE POP UP FORM -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteLabel">Delete Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="deletedata.php" method="POST">
        <div class="modal-body text-center">
          <input type="hidden" name="delete_id" id="delete_id">
          <h4>Do you really want to delete this data?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="submit" name="deletedata" class="btn btn-danger">Yes, Delete it!</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Table -->
<div class="container mt-5 pt-5">
  <table class="table table-hover table-bordered table-striped shadow">
    <thead class="table-dark">
      <tr>
        <th>Full Name</th>
        <th>NIC</th>
        <th>Address</th>
        <th>District</th>
        <th>Phone Number</th>
        <th>Course</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="studentTable">
      <?php
      $path = mysqli_connect("localhost", "root", "", "campus_lms");
      $sql = "SELECT * FROM sregister";
      $result = $path->query($sql);

      if (!$result) {
          die("Invalid query: " . $path->error);
      }

      while ($row = $result->fetch_assoc()) {
          echo "<tr>
              <td>" . $row["name"] . "</td>
              <td>" . $row["nic"] . "</td>
              <td>" . $row["address"] . "</td>
              <td>" . $row["district"] . "</td>
              <td>" . $row["number"] . "</td>
              <td>" . $row["course"] . "</td>
              <td>
                  <button type='button' class='btn btn-success editbtn'><i class='fa fa-pencil-alt'></i> Update</button>
                  <button type='button' class='btn btn-danger deletebtn'><i class='fa fa-trash'></i> Delete</button>
              </td>
            </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Footer -->
<footer class="footer mt-auto py-0 bg-primary text-white text-center">
  <p>© All Rights Reserved, IMBS GREEN CAMPUS. Powered by <a href="https://web.facebook.com/officialyoyo1" target="#" class="text-white">Chamodh</a></p>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/dashboardscript.js"></script>

<script>
  // Search Functionality
  document.getElementById('searchInput').addEventListener('input', function() {
    let filter = this.value.toUpperCase();
    let rows = document.querySelectorAll('#studentTable tr');

    rows.forEach(row => {
      let name = row.cells[0].textContent.toUpperCase();
      let nic = row.cells[1].textContent.toUpperCase();

      if (name.includes(filter) || nic.includes(filter)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });


$(document).ready(function () {

$('.editbtn').on('click', function () {
$('#editmodal').modal('show');

$tr = $(this).closest('tr');

var data = $tr.children("td").map(function () {
return $(this).text();
}).get();

console.log(data);

$('#name').val(data[0]);
$('#nic').val(data[1]);
$('#address').val(data[2]);
$('#district').val(data[3]);
$('#number').val(data[4]);
$('#course').val(data[5]);

});
});
</script>

</body>
</html>