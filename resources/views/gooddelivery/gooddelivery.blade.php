@extends('layouts.master')
@section('content')

            
                    <div class="card col-md-9 submit-right shadow-lg">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="submit-heading ml-3">Good Delivery Form
                                <span><img src="{{asset('/image/form.png')}}" alt="logo" width="50"/></span>
                                </h3>
                                
                                
                                <form action="{{ route('gooddelivery.store') }}" method="POST">
                                @csrf
                                
                                <div class="submit-form">
                                <hr class="style16 shadow-sm">

                                <div class="row pt-4">
                                       
                                       <div class="col-md-6">
                                         <div class="form-group shadow-sm">

                                          <input type="text" class="form-control" name="delino" placeholder="Enter Delivery number"> 
                                            
                                         </div>
                                         @error('delino')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                                    @enderror
                                       </div>
                                     <div class="col-md-6">
                                         <div class="form-group shadow-sm">

                                               <input type="date" class="form-control" name="delidate" placeholder="Enter Delivery date"> 

                                         </div>  
                                         @error('delidate')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                        @enderror                                      
                                     </div>
                                 
                                  </div>
                                
                                    <div class="row pt-4">
                                       
                                            <div class="col-md-6">
                                                <div class="form-group shadow-sm">

                                                <input type="text" class="form-control" name="business" placeholder="Enter Business"> 
                                                   
                                                </div>
                                                @error('business')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                                 @enderror 
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group shadow-sm">

                                                <input type="text" class="form-control" name="attn" placeholder="Enter Attn"> 

                                                @error('attn')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                                 @enderror    
                                                 
                                                </div>
                                               
                                              
                                            </div>
                                        
                                    </div>

                                    <div class="row pt-4">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group shadow-sm">

                                                <input type="text" class="form-control" name="phno" placeholder="Enter phno"> 

                                            </div>
                                            @error('phno')
                                                        <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                            @enderror 
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group shadow-sm">

                                                <input type="text" class="form-control" name="address" placeholder="Enter phno"> 

                                            </div>
                                            @error('address')
                                                        <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                            @enderror 
                                            
                                        </div>
                                   
                                    </div>

                                    <div class="row pt-3">
                                       
                                       <div class="col-md-12">
                                        <textarea class="form-control shadow-sm" name="description" id="summary-ckeditor" rows="7" placeholder="Summer Note *"></textarea>
                                            @error('description')
                                                <div class="text-danger" style="">{{ $message }}</div>
                                            @enderror
                                       </div>
                                     
                                    </div>
                                  
                                    <div class="row pt-4">
                                       
                                         <div class="col-md-6">
                                           <div class="form-group shadow-sm">

                                           <input type="text" class="form-control" name="issueby" placeholder="Enter Issued by"> 
                                              
                                           </div>
                                           @error('issueby')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                           @enderror
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group shadow-sm">

                                                <input type="text" class="form-control" name="receivedby" placeholder="Enter received in good condition by">  
                                           </div>
                                           @error('receivedby')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                           @enderror
                                        <div>
                                   
                                    </div>
                                      <input type="submit" class="btnsubmit mt-3 float-right shadow" id="btnsubmit"  value="submit">
                                  

                                     </div>
                                </form>

                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
 @endsection       


   
    