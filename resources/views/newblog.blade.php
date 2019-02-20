

<div style="margin:0 auto;width:50%; margin: 0 auto;" >

	<form action="{{ url('blogpost') }}" method="post">
    
    	{{ csrf_field() }} 

        <label style="width:25%;">Title:<br></label>
        
        <input type="text" class="form-control" style="width:70%;display:inline-block;" placeholder="title" name="title" required />
 
        <br>
         
        <label style="display:inline;">Blog Text:<br></label>
            
        <textarea style="display:inline-block;width:80%;height:100px;" class="form-control" placeholder="" name="body"   required ></textarea>
  
        <button type="submit" class="btn btn-sm btn-success center-block">Submit</button>

    </form>

</div>
