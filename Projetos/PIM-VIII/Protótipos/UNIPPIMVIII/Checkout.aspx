<%@ Page Title="Checkout" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Checkout.aspx.cs" Inherits="UNIPPIMVIII.Checkout" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <h1>Checkout</h1>

    <p>Nome do remetente</p>
    <input type="text" />
    <p>CEP</p>
    <input type="text" />
    <p>Complemento</p>
    <input type="text" />
    <p>Número</p>
    <input type="text" />
    <p>Estado</p>
    <input type="text" />
    <p>Cidade</p>
    <input type="text" />
    <br />
    <p>
        <a runat="server" href="~/">
            <button type="button" class="btn btn-primary" style="width: 30%; height: auto;">Confirmar</button></a>
    </p>
</asp:Content>
