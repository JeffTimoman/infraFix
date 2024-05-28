@extends('layouts.manager')

@section('style')
    <style>
        .main {
            background-color: #F1F1F1;
        }

        .cardbox:nth-child(3) .card {
            background-color: #a50000;
        }

        .cardbox:nth-child(3) .material-symbols-outlined {
            color: white;
        }

        .cardbox h5 {
            font-size: 30px;
        }

        .cardbox p {
            font-size: 20px;
            color: #D4D4D4;
        }

        .cardbox:nth-child(3) h5 {
            color: white;
        }

        .cardbox:nth-child(3) p {
            color: #D8A4A4;
        }


        .card-body {
            display: flex;
            align-items: center;
            /* Align items vertically in the center */
            justify-content: space-between;
            /* Distribute space between items */
        }

        .card-text {
            margin-right: 10px;
            /* Adjust spacing between text and icon as needed */
        }

        .card-text {
            margin-right: 10px;
            /* Adjust spacing between text and icon as needed */
        }

        .card-icon {
            /* Optional: styles for the card icon */
        }

        .reportBox {
            display: flex;
            align-items: center;
            /* Align items vertically in the center */
            justify-content: space-between;
        }

        .report {
            background-color: white;
        }

        .table-header {
            display: flex;
            border-bottom: 3px solid #EDEDED;
            /* background-color: #a50000; */
            align-items: center;
            /* margin-bottom: 3px; */
        }

        .table-title {
            width: 50%;
        }


        .table-button {
            width: 50%;
            display: flex;
            justify-content: end;
        }

        .table-title h5 {
            font-weight: bold;
            font-size: 24px;
        }

        .button-seeAll {
            border-radius: 20px;
            border-width: 0px;
            background-color: #a50000;
            width: 92px;
            height: 43px;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        .report-table {
            width: 100%;
        }

        .report-table th {
            border-bottom: 3px solid #EDEDED;
            text-align: center;
        }

        .report-table td {
            border-bottom: 1px solid #EDEDED;
            text-align: center;
        }
    </style>
@endsection

@section('title')
    Unggah Kasus
@endsection

@section('content')

@endsection