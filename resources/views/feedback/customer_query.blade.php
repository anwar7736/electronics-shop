<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ক্রেতার কুয়েরি পর্যবেক্ষন</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="container m-5">
        <div class="row">
            <div class="col-md-8 col-sm-12 offset-4">
                <div class="card">
                    <form action="{{route('customer.feedback')}}" method="post">
                        @csrf
                        <div class="card-header p-5 text-center text-success">
                            <h5><strong>***আপনার মতামত দিয়ে আমাদেরকে সহযোগিতা করুন***</strong></h5>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                                <label for="name" class="text-danger">আপনার নাম লিখুন</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" autofocus>
                                @error('name')
                                    <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div><br>                        
                            <div class="form-group">
                                <label for="phone" class="text-danger">আপনার সঠিক মোবাইল নাম্বারটি লিখুন</label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('name') is-invalid @enderror">
                                @error('phone')
                                    <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div><br>
                            <hr>
                            <p class="text-center text-success"><strong>**নিচের প্রশ্নগুলোর সঠিক উত্তর দিন**</strong></p><hr>
                            <div class="form-group">
                                <label for="question1" class="text-danger">প্রশ্ন ০১. আপনার পছন্দের একটি কোম্পানী বাছাই করুন</label>
                                <select name="question1" id="question1" value="{{ old('question1') }}" class="form-control mt-2 @error('name') is-invalid @enderror" >
                                   <option value="" selected disabled>যেকোন একটি বাছাই করুন</option>
                                    <option value="BD">BD</option>
                                </select>
                                @error('question1')
                                    <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="question2" class="text-danger">প্রশ্ন ০২. আপনার পছন্দের একটি কোম্পানী বাছাই করুন</label>
                                <select name="question2" id="question2" value="{{ old('question2') }}" class="form-control mt-2 @error('name') is-invalid @enderror" >
                                   <option value="" selected disabled>যেকোন একটি বাছাই করুন</option>
                                    <option value="BD">BD</option>
                                </select>
                                @error('question2')
                                    <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div><br>
                            <div class="form-group">
                                <label for="question3" class="text-danger">প্রশ্ন ০৩. আপনার পছন্দের একটি কোম্পানী বাছাই করুন</label>
                                <select name="question3" id="question3" value="{{ old('question3') }}" class="form-control mt-2 @error('name') is-invalid @enderror" >
                                   <option value="" selected disabled>যেকোন একটি বাছাই করুন</option>
                                    <option value="BD">BD</option>
                                </select>
                                @error('question3')
                                    <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group text-center">
                                <input type="submit" value="পাঠিয়ে দিন" class="btn btn-outline-success">
                            </div>
                        </div> 
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>