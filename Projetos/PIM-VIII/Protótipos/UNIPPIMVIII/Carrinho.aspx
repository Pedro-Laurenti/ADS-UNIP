<%@ Page Title="Carrinho" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Carrinho.aspx.cs" Inherits="UNIPPIMVIII.Carrinho" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <h1>Carrinho</h1>
    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary">
                <th scope="col"></th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço unitário</th>
                <th scope="col">Preço total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><input type="checkbox" /></th>
                <td>Smartphone Nokia C21 ...</td>
                <td>1</td>
                <td>R$10,00</td>
                <td>R$10,00</td>
            </tr>            
        </tbody>
    </table>
    <br />
    <p>
        <a runat="server" href="~/Checkout.aspx"><button type="button" class="btn btn-primary" style="width:30%;height:auto;">Confirmar</button></a>
    </p>
</asp:Content>
