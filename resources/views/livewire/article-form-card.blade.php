<div class="col-sm-12">
    <div id="post-modal-data" class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">
                    Create Article
                </h4>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center">
                <form
                    class="post-text ms-3 w-100"
                    data-bs-toggle="modal"
                    data-bs-target="#post-modal"
                    action="javascript:void();"
                >
                    <input
                        type="text"
                        class="form-control rounded"
                        placeholder="Write something here..."
                        style="border: none"
                    />
                </form>
            </div>
        </div>
        <div
            class="modal fade"
            id="post-modal"
            tabindex="-1"
            aria-labelledby="post-modalLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-fullscreen-sm-down"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="post-modalLabel"
                        >
                            Create Article
                        </h5>
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            <i
                                class="ri-close-fill"
                            ></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div
                            class="d-flex align-items-center"
                        >
                            <form
                                class="post-text w-100"
                                action="javascript:void();"
                                method="POST"
                            >
                                @csrf
                                <div class="form-floating mb-2">
                                    <input 
                                        type="email" 
                                        class="form-control" 
                                        id="floatingInputValue" 
                                        placeholder="name@example.com" 
                                        name="title"
                                    >
                                    <label 
                                        for="floatingInputValue"
                                    >
                                        Input with value
                                    </label>
                                </div>
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        placeholder="Leave a comment here"
                                        id="floatingTextarea2" 
                                        style="height: 100px"
                                        name="body"></textarea>
                                    <label for="floatingTextarea2">Comments</label>
                                </div>
                            </form>
                        </div>
                        <button type="submit" class="btn btn-primary d-block w-100 mt-3">
                            Post
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>