<div>
    <div class="col-sm-12">
        <div class="card card-block card-stretch card-height">
            <div class="card-body">
                <div class="user-post-data">
                    <div class="d-flex justify-content-between">
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <h5 class="mb-0 d-inline-block">
                                        {{ $article->user->username }}
                                    </h5>
                                    <p class="mb-0 text-primary">
                                        {{ $article->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('home.show', $article->slug) }}" class="fw-bold fs-4 text-dark mb-1">
                        {{ $article->title }}
                    </a>
                    <p>
                        {{ $article->body }}
                    </p>
                </div>
                <div class="comment-area mt-3">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                            <div class="total-comment-block">
                                @if ($article->comments_count)
                                    <strong>{{ $article->comments_count }}</strong>  Comment
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr />
                    <ul class="post-comments list-inline p-0 m-0">
                        @foreach ($article->comments as $comment)
                            <li class="mb-2">
                                <div class="d-flex">
                                    <div class="comment-data-block ms-3">
                                        <strong>{{ $comment->user->username }}</strong>
                                        <span class="text-primary">
                                            {{ $comment->created_at->diffForHumans() }}
                                        </span>
                                        <p class="mb-0">
                                            {{ $comment->body }}
                                        </p>
                                        <div class="d-flex flex-wrap align-items-center comment-activity">
                                            
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        @if ($count < $article->comments_count)
                            <li class="mb-2">
                                <div class="d-flex">
                                    <button wire:click='showAll' class="btn btn-outline-primary btn-sm ms-3">Show All</button>
                                </div>
                            </li>
                        @endif
                    </ul>
                    @auth
                        <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment"name="body"/>
                        <div class="comment-attagement d-flex">
                            <button type="submit" class="btn btn-secondary">
                                <i class="ri-send-plane-fill me-3"></i>
                            </button>
                        </div>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>