@extends('master.master')
@section('title', 'pricing')
@section('content')
<link rel="stylesheet" href="/assets/css/main/pricing.css">

<div class="pric1">
    <h1>Pay once, get your business perfectly</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor</p>
</div>

<div class="box-pricing">
    <div class="content_pricing">
        <div class="box1">
            <div class="content_box">
                <h1>Book Keeping</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                 
                <div class="btn_get">
                    <a href="#">get started</a>
                </div>
                <div class="box-desc">
                        <p><i class="bi bi-check-circle-fill"></i> Record daily transaction</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Raising sales invoice</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Booked purchased invoice</p>
                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Check PO,DO,invoice</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Payroll processing</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Bank reconciiation</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Record receivable collections and deposits</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> AR and AP reconciliation</p>
                    
                </div>
                
            </div>
        </div>
        
        <div class="box1">
            <div class="content_box">
                <h1>Tax Services</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                 
                <div class="btn_get">
                    <a href="#">get started</a>
                </div>
                <div class="box-desc">
                        <p><i class="bi bi-check-circle-fill"></i> Monthly value added tax</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Monthly income tax reporting</p>

                        <div class="line"></div>

                        <p><i class="bi bi-check-circle-fill"></i> Annual tax reporting</p>

                        <div class="line"></div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class="pricing-bot">
    <div class="btn-contactme">
        <a href="#">Contact me for more package information</a>
    </div>
</div>

    


@endsection