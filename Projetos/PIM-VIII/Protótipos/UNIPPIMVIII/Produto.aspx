<%@ Page Title="Produto" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Produto.aspx.cs" Inherits="UNIPPIMVIII.Produto" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <div class="row">
        <div class="col-md-7">
            <h1>Smartphone Nokia c21 Plus 4g 128GB Tela HD+ 6,5 Câmera Dupla 13MP Android Bateria de 2 dias de duração +</h1>
            <h2>R$100,00</h2>
            <h3>Em até 12x sem juros</h3>
            <p>
            <a runat="server" href="Carrinho.aspx"><button type="button" class="btn btn-primary" style="margin:auto;width:70%;height:auto;">Adicionar ao Carrinho</button></a>
                </p>
            <br/>
            <a runat="server" href="Checkout.aspx"><button type="button" class="btn btn-light" style="margin:auto;width:70%;height:auto;">Comprar</button></a>
        </div>
        <div class="col-md-5">
            <img src="imgs/celular4.png" style="margin:auto;width:70%;height:auto;border:2px solid black" />
        </div>
    </div>
</asp:Content>
