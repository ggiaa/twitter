<x-app-layout>
    <div class="row col-lg-12">
        <div class="col-lg-8">
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