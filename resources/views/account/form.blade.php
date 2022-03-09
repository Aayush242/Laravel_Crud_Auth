<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="first_name" value="{{ $acccount->first_name??''}}" class="form-inline"  placeholder="First_name">
                @error('first_name')
                <div class="alert alert-danger mt-1 mb-1">
                    {{ $message }}
                </div>
                @enderror
            <continue>    
            <input type="text" name="last_name" value="{{ $acccount->last_name??''}}" class="form-inline" placeholder="Last_name">
                @error('last_name')
                <div class="alert alert-danger mt-1 mb-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-2 mt-3">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-inline" placeholder="Email" value="{{ $account->email??''}}">
                @error('email')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-2 mt-3">
            <strong>Dob:</strong>        
            <input type="date" name="dob" value="{{ $account->dob??''}}" class="form-inline" placeholder="Dob">
            @error('dob')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>  
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group mb-2 mt-3">
            <strong>Address:</strong>
            <input type="text" name="address" value="{{ $account->address??''}}" class="form-inline" placeholder="Building Name/No.">
            <input type="text" name="address" value="{{ $account->address??''}}" class="form-inline" placeholder="Landmark">
            @error('address')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group mb-2 mt-3">
            <strong>Phone_no:</strong>
            <input type="tel" name="phone_no" value="{{ $account->phone_no??''}}" class="form-inline" placeholder="Phone_no">
            @error('phone_no')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group ml-3 ">
            <label><strong>Gender : </strong></label>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Male" value="male" @if($person->gender??''=='Male') checked @endif>
                <label class="form-check-label" for="Male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Female" value="female"@if($person->gender??''=='Female'??'') checked @endif>
                 <label class="form-check-label" for="Female">
                     Female
                 </label>
             </div>
        </div>  
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group ml-1 mb-2 mt-3 ">
            <strong>Hobby:</strong>
            <input type="checkbox" name="hobby" value="Singing" ><label>Singing</label>
            <input type="checkbox" name="hobby" value="Dancing" ><label>Dancing</label>
            @error('hobby')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <br>
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group ">
            <br>
            <strong> <label for="country">Choose a Country:</label></strong>

            <select name="country" id="country">
                <option value="India">India</option>
                <option value="Iussia">Russia</option>
                <option value="America">America</option>
                <option value="Poland">Poland</option>
            </select>
            @error('country')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary ml-3" >Submit</button>
    </div>
    
</div>
