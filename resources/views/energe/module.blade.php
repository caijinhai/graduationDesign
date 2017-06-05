@extends('layouts.app')
@section('content')
    <div class="jumbotron  masthead energer-bg">
        <div class="container text-center">
            <h1>Thermodynamics module</h1>
            <p>涉及热力学计算问题，包括公式计算和题型模块计算两大部分</p>
        </div>
    </div>

    <div class="container">
        <h2>热力学题型模块：</h2>

        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img style="height:64px;width:64px;" class="media-object" src="/img/icon.png" alt="icon">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">定压冷却过程，求状态变化量</h4>
                气体定压冷却过程，计算气体热力学能变化量，焓变化量及熵变化量。
            </div>
        </div>
        <hr>
        <div class="row">
            <label>题型示例：</label>
            <p class="text-center">CO2按定压过程流经冷却器，P1=P2=0.105MPa,温度由600k冷却到366K,试计算1kgCO2的热力学能变化量、焓变化量及熵变化量。</p>
        </div>

        <div class="row">
            <label>题型参数：</label>
            <div class="container">
                <label>请选择气体参数：</label>
                <select name="formula" class="formula-select form-control">
                    <option value="CO2">CO2</option>
                    <option value="O2">O2</option>
                    <option value="CO">CO</option>
                    <option value="N2">N2</option>
                    <option value="H2O">H2O</option>
                    <option value="SO2">SO2</option>
                    <option value="空气">空气</option>
                </select>
                <label>定压过程压力大小：</label>
                <div class="input-group">
                    <span class="input-group-addon">压力大小</span>
                    <input type="text" class="form-control" placeholder="单位为MPa">
                </div>
                <label>冷却前温度：</label>
                <div class="input-group">
                    <span class="input-group-addon">温度T1</span>
                    <input type="text" class="form-control" placeholder="单位为K">
                </div>
                <label>冷却后温度：</label>
                <div class="input-group">
                    <span class="input-group-addon">温度T2</span>
                    <input type="text" class="form-control" placeholder="单位为K">
                </div>
                <label>正确填写参数后，请点击submit按钮，计算结果将展示在下方。</label>
                <div class="input-group">
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>

        <div class="row">
            <label>结果展示：</label>
            <div class="input-group">
                <span class="input-group-addon">热力学能变化量：</span>
                <input type="text" class="form-control" placeholder="单位为K">
            </div>
            <div class="input-group">
                <span class="input-group-addon">焓变化量：</span>
                <input type="text" class="form-control" placeholder="单位为K">
            </div>
            <div class="input-group">
                <span class="input-group-addon">熵变化量：</span>
                <input type="text" class="form-control" placeholder="单位为K">
            </div>
        </div>
    </div>
@endsection


