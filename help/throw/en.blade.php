@section('lang01')
This is a function to donate nem to NEMber. When you click the "Tip nem" button, the dialog opens, please decide the amount of tip nem with the slider. <br />
Then click on the key button and select the key file created after user registration. <br />
Clicking the tip nem button at the bottom of the dialog will display the amount of tip nem and nemlog/nem system fees.
Please click OK button when you accept. After a few minutes the nem block chain is approved and reflected to the balance. <br /> <br />
Also when tip from article, you can put comment to the article at the same time as tip nem. <br />
when you click the "comment" button beside the tip nem amount, the comment field will be displayed so please execute tip nem after input comment.
@endsection

@section('lang02')
For guest user, QR code for mobile wallet will be displayed insted of key-file button.
@endsection

@section('lang03')
If you tip nem through nemlog,following fee will be happened.
Fee is included in the tip nem amount decided by the user.<br/><br/>
	・nem system sending fee ： 0.1xem (Will be someone's harvest!)<br/>
	・nemlog system fee ： 5% of total tip(Min0.05xem)
@endsection