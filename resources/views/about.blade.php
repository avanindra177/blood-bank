@extends('Layouts.app')

@section('content') 
    <div class="page-header" style="margin-left:120px;"><h4> Red blood cell compatibilty table </h4></div>
    <p>
    <div style="margin-left:120px;">
        <table class="table table-bordered table-striped table-hover table-responsive info-table">
            <thead align="right">
                <tr>
                    <th>
                        Recipient
                    </th>

                    <th colspan="8">
                        Donor
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td width="120px;">
                        
                    </td>

                    <td width="80px;">
                        <b>O-</b>
                    </td>

                    <td width="80px;">
                        <b>  O+</b>
                    </td>

                    <td width="80px;">
                        <b> A-</b>
                    </td>

                    <td width="80px;">
                        <b>A+</b>
                    </td>
                
                    <td width="80px;">
                        <b>B-</b>
                    </td>

                    <td width="80px;">
                        <b> B+</b>
                    </td>

                    <td width="80px;">
                        <b> AB-</b>
                    </td>

                    <td width="80px;">
                        <b> AB+</b>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>O-</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                    <b>O+</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                </tr>

                <tr>
                    <td>
                    <b>  A-</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                    <b>  A+</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                    <b> B-</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                    <b>B+</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                    <td></td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i> 
                    </td>

                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                    <b>AB-</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td></td>
                </tr>
                <tr>
                    <td>
                    <b>  AB+</b>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>

                    <td>
                        <i class="fa fa-check"></i>
                    </td>
                </tr> 
            </tbody>
        </table>
    </div>
    </p>


    <div class="page-header">   <h4>Why Donating ? </h4></div>
    <p>
        Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:
    </p>

    <p>
        You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
        A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
        Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
    </p>

    <p>
        If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
        Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
    </p>

    <p>
        Blood will be separated into components within eight hours of donation
        The blood will then be taken to the laboratory for testing.
        Once found safe, it will be kept in special storage and released when required.
        The blood is now ready to be taken to the hospital, to save lives.

    </p>
@endsection
