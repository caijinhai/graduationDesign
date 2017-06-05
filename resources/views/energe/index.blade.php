@extends('layouts.app')
@section('content')
    <div class="jumbotron  masthead energer-bg">
        <div class="container text-center">
            <h1>Thermodynamics module</h1>
            <p>涉及热力学计算问题，包括公式计算和题型模块计算两大部分</p>
        </div>
    </div>

    <div class="container" style="padding-top: 20px;">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#formula" aria-controls="home" role="tab" data-toggle="tab">公式计算</a></li>
            <li role="presentation"><a href="#questions" aria-controls="profile" role="tab" data-toggle="tab">题型模块</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="formula" style="padding:20px 0;">
                <div class="container">
                    <div class="row">
                        <label>请选择公式：</label>
                        <select name="formula" class="formula-select form-control">
                            <option value="1">计算比热容比</option>
                        </select>
                    </div>
                    <hr>
                    <div class="row">
                        <label>公式定义：</label>
                        <div class="text-center">
                            <p>比值Cp/Cv称为比热容比，或质量热容比，它在热力学理论研究和热工计算方面是一重要参数，用r表示。</p>
                            <img src="img/specific-heat-ratio.gif" alt="比热容比公式">
                        </div>
                    </div>
                    <div class="row">
                        <label>公式参数：</label>
                        <div class="text-center">
                           <ul class="list-unstyled text-left" style="text-indent: 15px;">
                               <li>
                                   <label>公式参数一：</label>
                                   <p>Cp：在压强不变的情况下，单位质量的某种物质温度升高1K所需吸收的热量，叫做该种物质的“定压比热容”，用符号Cp表示，国际制单位是：J/(kg·K)。</p>
                               </li>
                               <li>
                                   <label>公式参数二：</label>
                                   <p>Cv：在物体体积不变的情况下，单位质量的某种物质温度升高1K （开尔文）所需吸收的热量，叫做该种物质的“定容比热容”以符号Cv表示，国际单位是：J/(kg·K)。</p>
                               </li>
                           </ul>
                        </div>
                    </div>
                    <div class="row">
                        <label>公式扩展：</label>
                        <div class="text-center">
                            <p>根据比热容比公式，可以扩展出求定压热容公式和定容热容公式</p>
                            <img src="img/specific-heat-ratio-extension.gif" alt="比热容比扩展公式">
                        </div>
                    </div>
                    <div class="row">
                        <label>公式计算：</label>
                        <div class="text-center">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="input-group">
                                        <span class="input-group-addon">参数Cp：</span>
                                        <input type="text" class="form-control">
                                    </div>
                                </li>
                                <li>
                                    <div class="input-group">
                                        <span class="input-group-addon">参数Cv：</span>
                                        <input type="text" class="form-control">
                                    </div>
                                </li>
                            </ul>
                            <div class="input-group">
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label>计算结果：</label>
                        <div class="text-center">
                            <p>无运算，结果默认展示为空。</p>
                        </div>
                    </div>
                </div>
            </div>


            <div role="tabpanel" class="tab-pane" id="questions" style="padding:20px 0;">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img src="/img/icon.png" alt="icon">
                            <div class="caption">
                                <h4>定压冷却过程，求状态变化量</h4>
                                <p>气体定压冷却过程，计算气体热力学能变化量，焓变化量及熵变化量</p>
                                <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button">View more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


