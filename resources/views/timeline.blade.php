<x-app-layout>
    <div class="row col-lg-12">
        <div class="col-lg-8">

            <form action="" method="POST">
                <div class="border rounded-3">                
                    <div class="d-flex mt-3">                
                        <div class="flex-shrink-0 mr-3">
                            <img class="w-10 h-10 rounded-circle" style="height: 40px; width: 40px; margin-inline-end: 10px; margin-inline-start: 10px" src="https://i.pravatar.cc/150" alt="{{ Auth::user()->name }}">
                        </div>
                        <div class="w-100" >
                            <div class="mb-2" style="font-weight: 600">
                                {{ Auth::user()->name }}
                            </div>
                            
                            <div class="mb-3">                                
                                <textarea id="my-textarea" rows="3" placeholder="What is on your mind..." class="form-control" name="" style="resize: none; width: 95%"></textarea>
                            </div>
                            <div class="d-flex justify-content-end mb-3"  style="width: 95%">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>                    
                </div>
            </form>

            <div class="border rounded-3">
                @foreach ($statuses as $status)
                <div class="d-flex mt-3">                
                    <div class="flex-shrink-0 mr-3">
                        <img class="w-10 h-10 rounded-circle" style="height: 40px; width: 40px; margin-inline-end: 10px; margin-inline-start: 10px" src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}">
                    </div>
                    <div>
                        <div class="mb-2" style="font-weight: 600">
                            {{ $status->user->name }}
                        </div>
                        <div>
                            {{ $status->body }}
                        </div>
                        <div>
                            <small style="color: gray">{{ $status->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
        </div>
        <div class="col-lg-4">
            <div class="border p-5 rounded">
                <h5>Recently follow</h5>
                @foreach (Auth::user()->follows()->limit(5)->get() as $user)
                    <div class="d-flex my-3" style="align-items: center">
                        <div class="flex-shrink-0 mr-3">
                            <img class="w-10 h-10 rounded-circle" style="height: 40px; width: 40px; margin-inline-end: 10px" src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}">
                        </div>
                        <div>
                            <div style="font-weight: 600">
                                {{ $user->name }}
                            </div> 
                            <div>
                                <small style="color: gray">{{ $user->pivot->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>                    
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>