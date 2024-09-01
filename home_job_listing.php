<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health At Home - Index</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Job Section -->
  <section class="home_job_listing my-5">
    <div class="container">
      <h2 class="text-center my-4">Featured Jobs</h2>
      
      <!-- Buttons for showing job cards -->
      <div class="text-center mb-4">
        <button id="showRecent" class="btn btn-recent mx-2">Show Recent Jobs</button>
        <button id="showUpdated" class="btn btn-update mx-2">Show Updated Jobs</button>
      </div>
      
      <!-- Recent Jobs Section -->
      <div id="recentJobs" class="py-5">
        <h3 class="text-center">Recent Jobs</h3>

        <!-- Job Card 1 (Recent) -->
        <div class="card job-card recent">
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
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 2 (Recent) -->
        <div class="card job-card recent">
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
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 3 (Recent) -->
        <div class="card job-card recent">
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
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 4 (Recent) -->
        <div class="card job-card recent">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-column">
                            <h3 class="spacing-top">Caregiver</h3>
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
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 5 (Recent) -->
        <div class="card job-card recent">
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
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Updated Jobs Section -->
      <div id="updatedJobs" class="py-5" style="display: none;">
        <h3 class="text-center">Updated Jobs</h3>

        <!-- Job Card 1 (Updated) -->
        <div class="card job-card updated">
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
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 2 (Updated) -->
        <div class="card job-card updated">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-column">
                            <h3 class="spacing-top">Pharmacist</h3>
                            <p>No of openings: 3</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <h5 class="spacing-top">Type: Part-Time</h5>
                            <p>Published: 2022/05/21</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 3 (Updated) -->
        <div class="card job-card updated">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-column">
                            <h3 class="spacing-top">Dietitian</h3>
                            <p>No of openings: 2</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <h5 class="spacing-top">Type: Remote</h5>
                            <p>Published: 2022/08/30</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 4 (Updated) -->
        <div class="card job-card updated">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-column">
                            <h3 class="spacing-top">Occupational Therapist</h3>
                            <p>No of openings: 4</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <h5 class="spacing-top">Type: Full-Time</h5>
                            <p>Published: 2022/10/14</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 5 (Updated) -->
        <div class="card job-card updated">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-column">
                            <h3 class="spacing-top">Speech Therapist</h3>
                            <p>No of openings: 1</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <h5 class="spacing-top">Type: On-Site</h5>
                            <p>Published: 2022/12/01</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-column">
                            <a href="job-apply.html" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('showRecent').addEventListener('click', function() {
      document.getElementById('recentJobs').style.display = 'block';
      document.getElementById('updatedJobs').style.display = 'none';

      // Toggle active class
      this.classList.add('active');
      document.getElementById('showUpdated').classList.remove('active');
    });

    document.getElementById('showUpdated').addEventListener('click', function() {
      document.getElementById('recentJobs').style.display = 'none';
      document.getElementById('updatedJobs').style.display = 'block';

      // Toggle active class
      this.classList.add('active');
      document.getElementById('showRecent').classList.remove('active');
    });
  </script>
</body>
</html>
