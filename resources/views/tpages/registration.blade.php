@extends('tpages.layouts.main')

@push('body')

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>"Innovate Together"</p>
						<h1>Register here !</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                        <!-- Participant Details Section -->
                        <div class="card single-accordion">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Participant Details
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="billing-address-form">
                                        <form id="registrationForm">
                                            <p><input type="text" placeholder="Name" id="name" oninput="updateSummary()" required></p>
                                            <p><input type="text" placeholder="Roll No" id="rollNo" oninput="updateSummary()" required></p>
                                            <p><input type="text" placeholder="College" id="college" oninput="updateSummary()" required></p>
                                            <p><input type="text" placeholder="Hackathon ID" id="hackathonId" oninput="updateSummary()" required></p>
                                            <p><input type="tel" placeholder="Mobile No" id="mobileNo" oninput="updateSummary()" required></p>
                                            <p><input type="number" placeholder="Team Member Count" id="teamCount" oninput="updateSummary()" required></p>
                                            <p class="note">Note: Format should be NAME-ROLLNO-MOBILE</p>
                                            <p> <textarea placeholder="Team Member Name - ROLL NO" id="teamDetails" oninput="updateSummary()" required></textarea></p>
                                            <p><input type="text" placeholder="Mentor Name" id="mentorName" oninput="updateSummary()" required></p>
                                            <p><input type="text" placeholder="Mentor Code" id="mentorCode" oninput="updateSummary()" required></p>
                                            <!-- <p><textarea placeholder="Additional Details" id="additionalDetails" oninput="updateSummary()"></textarea></p> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Registration Details Section -->
                        <div class="card single-accordion">
    <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Verify
            </button>
        </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <div class="confirmation-checkbox">
                <label>
                    <input type="checkbox" id="detailsCorrect" required>
                    I confirm that all registration details are correct
                </label>
            </div>
            <div class="registration-details-form">
                <!-- <p>Your registration details will be displayed here.</p> -->
                <!-- Include the form or additional details here as needed -->
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>

            <!-- Summary Section -->
            <div class="col-lg-4">
                <div class="order-details-wrap">
                    <table class="order-details">
                        <thead>
                            <tr>
                                <th>General Overview</th>
                            </tr>
                        </thead>
                        <tbody class="order-details-body">
                            <tr>
                                <td><strong>Name:</strong> <span id="summaryName"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Roll No:</strong> <span id="summaryRollNo"></span></td>
                            </tr>
                            <tr>
                                <td><strong>College:</strong> <span id="summaryCollege"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Hackathon ID:</strong> <span id="summaryHackathonId"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Mobile No:</strong> <span id="summaryMobileNo"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Team Member Count:</strong> <span id="summaryTeamCount"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Team Member Details:</strong> <span id="summaryTeamDetails"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Mentor Name:</strong> <span id="summaryMentorName"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Mentor Code:</strong> <span id="summaryMentorCode"></span></td>
                            </tr>
                            <!-- <tr>
                                <td><strong>Additional Details:</strong> <span id="summaryAdditionalDetails"></span></td>
                            </tr> -->
                        </tbody>
                    </table>
                    <a href="#" class="boxed-btn">Submit Registration</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .note {
    font-size: 0.9em;
    color: red; /* Adjust color as needed */
    margin-top: 5px;
}
    </style>
</div>

<script>
    function updateSummary() {
        document.getElementById("summaryName").textContent = document.getElementById("name").value;
        document.getElementById("summaryRollNo").textContent = document.getElementById("rollNo").value;
        document.getElementById("summaryCollege").textContent = document.getElementById("college").value;
        document.getElementById("summaryHackathonId").textContent = document.getElementById("hackathonId").value;
        document.getElementById("summaryMobileNo").textContent = document.getElementById("mobileNo").value;
        document.getElementById("summaryTeamCount").textContent = document.getElementById("teamCount").value;
        document.getElementById("summaryTeamDetails").textContent = document.getElementById("teamDetails").value;
        document.getElementById("summaryMentorName").textContent = document.getElementById("mentorName").value;
        document.getElementById("summaryMentorCode").textContent = document.getElementById("mentorCode").value;
        document.getElementById("summaryAdditionalDetails").textContent = document.getElementById("additionalDetails").value;
    }
</script>

	<!-- end check out section -->
    @endpush