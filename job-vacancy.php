<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health At Home - Index</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
 
</head>
<body>
  <?php include 'carousel.php'; ?>

  <!-- Job Section -->
  <section class="home_job_listing">
    <div class="container">
      <h2 class="text-center">Featured Jobs</h2>

      <!-- Job Cards Section -->
      <div class="row">
        <!-- First Column -->
        <div class="col-lg-8 col-md-12">
          <!-- Job Cards -->
          <div class="job-cards-container">
            <!-- Job Card 1 -->
            <div class="card job-card" onclick="window.location.href='helper-job.php';">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card-column">
          <h3 class="spacing-top">Helper</h3>
          <p>No of openings: 5</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <h5 class="spacing-top">Type: Remote</h5>
          <p>Published: 2020/10/10</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <a href="job-form.php" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</div>


            <!-- Job Card 2 -->
        <div class="card job-card" onclick="window.location.href='nurse-job.php';">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card-column">
          <h3 class="spacing-top">Nurse</h3>
          <p>No of openings: 3</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <h5 class="spacing-top">Type: Full-Time</h5>
          <p>Published: 2021/06/15</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <a href="job-form.php" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

            <!-- Job Card 3 -->
         <div class="card job-card" onclick="window.location.href='therapist-job.php';">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card-column">
          <h3 class="spacing-top">Physical Therapist</h3>
          <p>No of openings: 2</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <h5 class="spacing-top">Type: Part-Time</h5>
          <p>Published: 2021/08/20</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <a href="job-form.php" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</div>


            <!-- Job Card 4 -->
   <div class="card job-card" onclick="window.location.href='receptionist-job.php';">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card-column">
          <h3 class="spacing-top">Receptionist</h3>
          <p>No of openings: 4</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <h5 class="spacing-top">Type: On-Site</h5>
          <p>Published: 2021/11/05</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <a href="job-form.php" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</div>


            <!-- Additional Job Cards Hidden Initially -->
            <!-- Job Card 5 -->
<div class="card job-card hidden-job-card" onclick="window.location.href='job-form.php';">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card-column">
          <h3 class="spacing-top">Medical Assistant</h3>
          <p>No of openings: 1</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <h5 class="spacing-top">Type: Remote</h5>
          <p>Published: 2022/02/01</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <a href="job-form.php" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</div>


            <!-- Job Card 6 -->
   <div class="card job-card hidden-job-card" onclick="window.location.href='job-form.php';">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card-column">
          <h3 class="spacing-top">Receptionist</h3>
          <p>No of openings: 2</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <h5 class="spacing-top">Type: Full-Time</h5>
          <p>Published: 2022/03/12</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-column">
          <a href="job-form.php" class="btn btn-apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

            <!-- Add more hidden job cards here as needed -->
          </div>

          <!-- View More Button -->
          <div class="text-center my-4">
            <button id="view-more-btn" class="btn btn-primary">View More</button>
          </div>
        </div>

        <!-- Second Column (Filters) -->
        <div class="col-lg-4 col-md-12">
          <!-- Search by Keyword Box -->
          <div class="filter-box mb-4">
            <h4>Search by Keyword</h4>
            <form id="search-form">
              <input type="text" id="search-keyword" name="search-keyword" class="form-control mb-2" placeholder="Enter job title or keyword">
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>

          <!-- Qualification Checklist Box -->
          <div class="filter-box mb-4">
            <h4>Qualification Checklist</h4>
            <form id="qualification-form">
              <div class="form-check">
                <input type="checkbox" id="degree1" name="qualification" value="Bachelor's Degree" class="form-check-input">
                <label for="degree1" class="form-check-label">Bachelor's Degree</label>
              </div>
              <div class="form-check">
                <input type="checkbox" id="degree2" name="qualification" value="Master's Degree" class="form-check-input">
                <label for="degree2" class="form-check-label">Master's Degree</label>
              </div>
              <div class="form-check">
                <input type="checkbox" id="degree3" name="qualification" value="PhD" class="form-check-input">
                <label for="degree3" class="form-check-label">PhD</label>
              </div>
            </form>
          </div>

          <!-- Shift Options Box -->
          <div class="filter-box mb-4">
            <h4>Shift</h4>
            <form id="shift-form">
              <div class="form-check">
                <input type="radio" id="shift1" name="shift" value="Morning" class="form-check-input">
                <label for="shift1" class="form-check-label">Morning</label>
              </div>
              <div class="form-check">
                <input type="radio" id="shift2" name="shift" value="Afternoon" class="form-check-input">
                <label for="shift2" class="form-check-label">Afternoon</label>
              </div>
              <div class="form-check">
                <input type="radio" id="shift3" name="shift" value="Night" class="form-check-input">
                <label for="shift3" class="form-check-label">Night</label>
              </div>
            </form>
          </div>
           <!-- Job Type Checklist Box -->
  <div class="filter-box mb-4">
    <h4>Job Type</h4>
    <form id="job-type-form">
      <div class="form-check">
        <input type="checkbox" id="remote" name="job-type" value="Remote" class="form-check-input">
        <label for="remote" class="form-check-label">Remote</label>
      </div>
      <div class="form-check">
        <input type="checkbox" id="full-time" name="job-type" value="Full-Time" class="form-check-input">
        <label for="full-time" class="form-check-label">Full-Time</label>
      </div>
      <div class="form-check">
        <input type="checkbox" id="part-time" name="job-type" value="Part-Time" class="form-check-input">
        <label for="part-time" class="form-check-label">Part-Time</label>
      </div>
      <div class="form-check">
        <input type="checkbox" id="on-site" name="job-type" value="On-Site" class="form-check-input">
        <label for="on-site" class="form-check-label">On-Site</label>
      </div>
    </form>
  </div>
        </div>
      </div>
    </div>
  </section>
    <?php include 'footer.php';?>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
   document.addEventListener("DOMContentLoaded", function() {
  var viewMoreBtn = document.getElementById("view-more-btn");
  var hiddenCards = document.querySelectorAll(".hidden-job-card");
  var isExpanded = false; // Track the current state

  viewMoreBtn.addEventListener("click", function() {
    if (hiddenCards.length > 0) {
      hiddenCards.forEach(function(card) {
        card.classList.toggle("hidden-job-card", isExpanded);
      });

      // Toggle button text based on the current state
      if (isExpanded) {
        viewMoreBtn.textContent = "View More";
      } else {
        viewMoreBtn.textContent = "View Less";
      }

      isExpanded = !isExpanded; // Toggle the state
    }
  });
});
  </script>
</body>
</html>
