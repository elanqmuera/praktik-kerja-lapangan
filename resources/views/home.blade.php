@extends('layouts.app')
@extends('layouts.userlayout.sidebar')
{{--@extends('layouts.userlayout.header')--}}
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT.Jerbee Indonesia</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{ asset('dashTemplate/template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="{{ asset('dashTemplate/template/text/css" href="js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashTemplate/template/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashTemplate/template/images/jerbee1.png')}}" />
  </head>


</html>
@endsection
