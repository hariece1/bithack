@extends('tpages.layouts.main')

@push('body')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>"Create New Problem Statement"</p>
                    <h1>Admin Panel</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- Problem Statement Form Section -->
<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                        <!-- Problem Statement Details Section -->
                        <div class="card single-accordion">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Problem Statement Details
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="billing-address-form">
                                        <form id="problemForm">
                                            <p><input type="text" placeholder="Problem ID" id="problemId" oninput="updateProblemSummary()" required></p>
                                            <p>
                                                <select id="problemType" oninput="updateProblemSummary()" required>
                                                    <option value="" disabled selected>Select Problem Type</option>
                                                    <option value="Software">Software</option>
                                                    <option value="Hardware">Hardware</option>
                                                </select>
                                            </p>
                                            <p><input type="text" placeholder="Problem Name" id="problemName" oninput="updateProblemSummary()" required></p>
                                            <p><textarea placeholder="Problem Description" id="problemDescription" oninput="updateProblemSummary()" required></textarea></p>
                                        </form>
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
                                <th>Problem Summary</th>
                            </tr>
                        </thead>
                        <tbody class="order-details-body">
                            <tr>
                                <td><strong>Problem ID:</strong> <span id="summaryProblemId"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Problem Type:</strong> <span id="summaryProblemType"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Problem Name:</strong> <span id="summaryProblemName"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Description:</strong> <span id="summaryProblemDescription"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="boxed-btn">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateProblemSummary() {
        document.getElementById("summaryProblemId").textContent = document.getElementById("problemId").value;
        document.getElementById("summaryProblemType").textContent = document.getElementById("problemType").value;
        document.getElementById("summaryProblemName").textContent = document.getElementById("problemName").value;
        document.getElementById("summaryProblemDescription").textContent = document.getElementById("problemDescription").value;
    }
</script>

@endpush
