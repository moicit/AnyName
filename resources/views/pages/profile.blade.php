@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="userProfilephoto" alt="{{ $user->name }}" src="/uploads/avatars/{{ $user->avatar }}">
            <h1>{{ $user->name }}</h1>
            <h5>{{ $user->bio }}</h5>
            <a  href="{{$user->fbLink}}" target="_blank" class="btn" style="font-size:30px;"><i class="fab fa-facebook"></i></a>
            <!-- Modal -->
            <div class="modal fade" id="editAvatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 style="position: absolute;" class="modal-title" id="exampleModalLabel">تعديل صورتك الشخصية</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="row" enctype="multipart/form-data" action="/profile" method="POST">
                        {{-- <label style="margin-right:30px;margin-bottom:20px;">تعديل صورتك الشخصية</label> --}}
                        <input type="file" id="getFile" name="avatar" style="display:block;width:80px; height:30px;margin-right:30px;margin-bottom:10px;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input onclick="do_save()" style="margin-right:30px;margin-bottom:20px;" type="submit" class="btn btn-sm btn-primary" value="حفظ">
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

      <div style="margin-top:20px;" class="col-md-10 col-md-offset-1">
          <button type="button" data-toggle="modal" data-target="#editAvatar">
          تعديل صورتك الشخصية
        </button>
      </div>
    </div>
</div>

<script>
function do_save()
  {
      if(Math.floor(Math.random() * 2)==1)
      {
          console.log('success');
          $('#editAvatar').modal('hide');
          return;
      }
      console.log('failure');
      return false;
  }
</script>
@endsection
