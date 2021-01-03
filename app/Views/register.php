<?= $this->extend('layout/page_register'); ?>
<?= $this->section('content'); ?>
<!-- begin register-content -->
<div class="register-content">
    <form action="index.html" method="GET" class="margin-bottom-0">
        <label class="control-label">Name <span class="text-danger">*</span></label>
        <div class="row row-space-10">
            <div class="col-md-6 m-b-15">
                <input type="text" class="form-control" placeholder="First name" required />
            </div>
            <div class="col-md-6 m-b-15">
                <input type="text" class="form-control" placeholder="Last name" required />
            </div>
        </div>
        <label class="control-label">Email <span class="text-danger">*</span></label>
        <div class="row m-b-15">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Email address" required />
            </div>
        </div>
        <label class="control-label">Password <span class="text-danger">*</span></label>
        <div class="row m-b-15">
            <div class="col-md-12">
                <input type="password" class="form-control" placeholder="Password" required />
            </div>
        </div>
        <div class="register-buttons">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
        <div class="m-t-20 m-b-40 p-b-40">
            Already a member? Click <a href="/login">here</a> to login.
        </div>
        <hr />
        <p class="text-center">
            &copy; E-Auction All Right Reserved 2020
        </p>
    </form>
</div>
<!-- end register-content -->
</div>
<!-- end right-content -->
</div>
<!-- end register -->

<?= $this->endSection(); ?>