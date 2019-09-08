@extends('layouts.main')

@section('title', "About Me - Akash Aryal")

@section('content')
<div class="container-fluid" style="background-color:white;">

<div class="container" style="background-color: white;">
    <div class="row">
        <div class="col-md-5 col-xs-12 py-4">
          <h2><strong>PubChem BioAssay Big Data Research</strong></h2>
        </div>
    </div>

    <div class="row">
      <div class="col-md-5 col-xs-12">
        <img class="img-fluid img-responsive" style="max-height: 20rem" src="{{ asset('PubChem.png') }}">
      </div>
      <div class="col-md-7 col-xs-12 ">
        <p>I started this research project in 2018 under the  supervision of <a href="https://iccm.k-state.edu/people/faculty/jaberi-douraki/" target="_blank">Prof. Majid Jaberi</a>
           at Kansas State University. This project takes NCBI's PubChem BioAssay repository and creates a more user friendly and optimized database that is capable
           of large data analysis using a relational database model to redirect effort from data management to actual research. </p>
        <p>ThispProject utilized <strong>MySQL</strong>, <strong>PostgreSQL</strong>, <strong>Python</strong>, and <strong>R</strong></p>
        <p>I presented my work at various research symposiums and competitions: </p>
        <ul>
          <li>Presented at Kansas State University’s Phi Zeta Undergraduate Poster Competition – <strong>3rd place</strong></li>
          <li>Presented at Kansas State University Olathe's “One Health Day” Symposium Nov 1, 2018.</li>
          <li>Presented at the American Chemical Society Midwest Regional (ACS MWRM) Conference Oct 23, 2018. </li>
        </ul>
        <p><a href="https://drive.google.com/file/d/1SyqwlONQHer92Zt-hastXx1xTkJKM93T/view?usp=sharing" target="_blank">Click here</a> to view the research poster for this project</p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12 py-4">
          <h2><strong>ICG Liver Cancer Research</strong></h2>
        </div>
    </div>

    <div class="row">
      <div class="col-md-5 col-xs-12">
        <img class="img-fluid img-responsive" style="max-height: 20rem;" src="{{ asset('ICG.png') }}">
      </div>
      <div class="col-md-7 col-xs-12 ">
        <p>I began this project in 2017 under the supervision of <a href="https://www.ece.k-state.edu/people/faculty/prakash/" target="_blank">Prof. Punit Prakash</a> at Kansas State University.
           This project explores the feasibility of using indocyanine green dye (ICG) for selective absorption of incident laser radiation with the end goal being to
           increase the specificity of laser interstitial thermal therapy in the liver.</p>
        <p>This project utilized <strong>COMSOL Multiphysics</strong> and <strong>MatLab</strong></p>
        <p>I presented this project at the American Chemical Society Midwest Regional (ACS MWRM) Conference Oct 23, 2018.</p>
        <p><a href="https://drive.google.com/file/d/1chh59bOw1eQpPpVrjw4DbUcmA8fhKPYH/view?usp=sharing" target="_blank">Click here</a> to view the research poster for this project</p>
      </div>
    </div>
</div>
</div>
@endsection
