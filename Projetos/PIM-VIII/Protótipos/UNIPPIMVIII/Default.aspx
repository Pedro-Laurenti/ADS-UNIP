<%@ Page Title="Pagina Inicial" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="UNIPPIMVIII._Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">

    <div class="row">
        <div class="col-md-5" style="margin:auto; display:flex">
            <img src="imgs/grupo_1830.png" />
        </div>
        <div class="col-md-7" style="height:311px;margin:auto;display:flex">
            <img src="imgs/grupo_1922.png"/>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <h2>Roupas</h2>
    </div>
    <div class="row" >
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/roupa1.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/roupa2.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/roupa1.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/roupa2.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="row">
        <h2>Celular</h2>
    </div>
    <div class="row" >
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/celular1.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/celular2.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/celular3.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
        <div class="col-md-3">
            <a runat="server" href="~/Produto.aspx"><img src="imgs/celular4.png" style="width:200px;height:200px;border:2px solid black"/></a>
        </div>
    </div>
</asp:Content>

