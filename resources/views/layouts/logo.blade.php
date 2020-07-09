@extends('report')
@section('content')
<div class="submit">
                <div class="row">
                    <div class="col-md-3 submit-left">
                        <img src="{{asset('/image/ritz_logo2.png')}}" alt="logo" />
                        <h3>Welcome</h3>
                        <p>Here is a Daily Report Generator</p>
                        <!-- <a href="{{ route('nocreport.index') }}" type="submit" name="" value="View All Report" class="shadow-sm"></a><br/> -->
                        <a href="{{ route('nocreport.index') }}">
                            <input  type="submit" name="" value="View All Report" class="shadow-sm">
                        </a><br>
                    </div>
                </div>
</div>
 @endsection