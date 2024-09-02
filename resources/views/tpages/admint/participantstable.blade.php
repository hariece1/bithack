@extends('tpages.layouts.main')

@push('body')
  <!-- Breadcrumb Section -->
  <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Manage Participants</p>
                        <h1>Participants Management</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Ends -->
 <!-- Participants Table Section -->
 <!-- Participants Table Section -->
 <div class="participants-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="participantsTable" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Hackathon ID</th>
                                <th>Team Count</th>
                                <th>Mobile No</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->
                            <tr>
                                <td data-label="Name">John Doe</td>
                                <td data-label="Roll No">123456</td>
                                <td data-label="Hackathon ID">BIT123</td>
                                <td data-label="Team Count">4</td>
                                <td data-label="Mobile No">+91 98765 43210</td>
                                <td data-label="Actions">
                                    <button class="btn btn-sm btn-primary edit-btn">Edit</button>
                                    <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more rows dynamically as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
    /* Custom Styles for the Table */
    .participants-section {
        margin: 50px 0;
    }

    .participants-section table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .participants-section thead {
        background-color: #f4f4f4;
        color: #333;
    }

    .participants-section th, .participants-section td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .participants-section th {
        background-color: #007bff; /* Primary color */
        color: #fff;
        font-weight: bold;
    }

    .participants-section td {
        background-color: #fff;
    }

    .participants-section tr:nth-child(even) td {
        background-color: #f9f9f9;
    }

    .participants-section .btn {
        margin: 0 5px;
        border-radius: 4px;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .participants-section table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .participants-section th, .participants-section td {
            display: block;
            text-align: right;
            border: none;
            position: relative;
            padding-left: 50%;
            padding: 12px;
        }

        .participants-section th::before, .participants-section td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: bold;
            text-align: left;
            background-color: #f4f4f4;
            border-bottom: 1px solid #ddd;
            top: 0;
            z-index: 1;
        }

        .participants-section td {
            border-bottom: 1px solid #ddd;
        }
    }
</style>

    </div>
    <!-- Participants Table Section Ends -->
    @endpush
 