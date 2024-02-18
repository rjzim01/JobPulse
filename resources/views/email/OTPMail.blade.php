<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
        <div style="border-bottom:1px solid #eee">
            <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Your Brand</a>
        </div>
        <p style="font-size:1.1em">Hi,</p>
        <p>A New User Want to Contact with Us</p>
        <div style="background: rgb(214, 214, 214); padding: 3px;">
            <h2>
                Name :- {{ $details['name'] }}
            </h2>
            <h2>
                Email :- {{ $details['email'] }}
            </h2>
            <h2>
                Subject :- {{ $details['subject'] }}
            </h2>
            <h2>
                Message :- {{ $details['message'] }}
            </h2>
        </div>
        {{-- <p style="font-size:0.9em;">Regards,<br />Apple Shop</p>
        <hr style="border:none;border-top:1px solid #eee" />
        <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
            <p>Apple Shop Inc</p>
            <p>1600 Amphitheatre Parkway</p>
            <p>California</p>
        </div> --}}
    </div>
</div>

