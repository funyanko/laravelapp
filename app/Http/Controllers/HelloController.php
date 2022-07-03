<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
   margin:-40px 0px -50px 0px; }
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
   return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
  
   // public function index($id='zero') {
    //    global $head, $style, $body, $end;
      
    //    $html = $head . tag('title','Hello/Index') . $style . $body
    //        . tag('h1','Index') . tag('p','this is Index page')
    //        . '<a href="/hello/other">go to Other page</a>'
    //        . $end;
    //    return $html;
   //  $data = ['msg' => 'これはコントローラから渡されたメッセージです。', 'id'=>$id];
   //  return view('hello.index' , $data);
   // }        ##ルーティングでの表示

   // public function index(Request $request){
   //    $data = ['msg'=>'これはコントローラーから渡されたメッセージです。', 'id'=>$request->id];
   //    return view('hello.index', $data);
   // }  ##ユーザーからのアクセス

// public function index(){
//    $data = ['msg'=>'これはBladeを利用したサンプルです。'];
//    return view('hello.index', $data);
// } ##bladeは優先して表示される

// public function index(){
//    $data = ['msg'=>'お名前を入力してください。', 'pass'=>'パスワードを入力してください。'];
//    $number = ['one', 'two', 'three', 'four', 'five'];
//    return view('hello.index', $data, ['number'=>$number]);
// }
public function index()
{
   return view('hello.index', ['message'=>'Hello!']);
}


// public function post(Request $request){
//    $msg = $request->msg;
//    $pass = $request->pas;
//    $data = ['msg'=>'こんにちは、'.$msg.'さん！', 'pass'=> 'パスワードは'.$pass.'です。'];
//    $number = ['one', 'two', 'three', 'four', 'five'];
//    return view('hello.index', $data, ['number'=>$number]);
// 
// use App\Http\Requests\HelloRequest;　を追加しておく

public function post(HelloRequest $request)
{
   return view('hello.index', ['msg'=>'正しく入力されました！']);
}

   public function other() {
       global $head, $style, $body, $end;
      
       $html = $head . tag('title','Hello/Other') . $style . $body
           . tag('h1','Other') . tag('p','this is Other page')
           . $end;
       return $html;
   }

}
