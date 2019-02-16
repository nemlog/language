@section('lang_description')

@endsection

@section('lang01')
"Complecated ,but Safe."<br/><br/>

This is the fudamental thought of this sytem
even though Complexity & Safety are trade-off relationship,
However, security is much important portion to deal crypt-currency
,so I considered how they go together,over and over again.<br/><br/>
		
In this service,the most crical point for security is when tipping nem
which is key functon of nemlog.
In nemlog,Special "Key file" is contributed to enhance security ability,
and user need to load this key file when tipping nem.
so user need to create & load this file & this is little bit complecated,
but it is important in order to use nemlog with safely tipping.<br/><br/>
This key file includes encripted private key & detail explanation is following.
Following 2 information are reuired when sending nem.<br/>
(1).Destination nem wallet address<br/>
(2).Your private key<br/><br/>
Basically, you require just these 2 information
,so if you steal your private key ,nem sending can be allowed from your wallet by using the key.
Needless to say,It is safe that only you manage your key & no one knows your key
,but the key must be required when sending...
If you will face currency sending service without private key input,it means the service has your key in their database
and all key information will be exposed if their system hacked.<br/><br/>
To reduce potential of this crisis, nemlog does not have any key information in its database.
so user need private key input in nemlog when tipping ,but row private key input is not so good strategy
even if nemlog is using SSL communication.<br/><br/>
Following is summary of nemlog security.<br/>
<ul class="font-serif mt20">
	<li class="two-indent">- nemlog database does not have any private key.This is nemlog decentralization</li>
	<li class="two-indent">- Key file is encrypted private key, the key is not speculated from key file because each key file has other encrypt method.</li>
	<li class="two-indent">- Not big matter if key file is stolen because each key file has other encrypt method.</li>
	<li class="two-indent">-Private key is decrypted from key file under offline condition & transfer the key to nem signed(crypted) conditon also under offline.No row info of private key is used on any communication.</li>
	<li class="two-indent">-Only wallet address which provided by nemlog syNEM can be used.Its purpose is to avoid using the wallet which has many assets.</li>
</ul><br />
<div class="font-serif mb30">
nemlog is making effort to enhance its security in order to use without any concern,
,but not 100%, user also have to take care the security. Please be careful about Malware threats.<br /><br />
-Do not use suspicious programs.<br />
-Do not receive suspicious emails.<br />
-Do not access untrusted links<br /><br />
Please be sure to self-defend.

Also, I would like to ask everyone not to store a lot of nem in nemlog wallet.
Thanks for your cooperation! Let's enjoy safe nemlog life!
</div>
@endsection

