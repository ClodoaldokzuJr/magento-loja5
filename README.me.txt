# Módulo StorePickup - Magento 2

Este módulo adiciona uma nova opção de método de entrega chamado **"Retirada na Loja"** ao Magento 2, conforme solicitado na Tarefa 2.

## Funcionalidades

- Método de entrega visível no **checkout** com nome "Retirada na Loja"
- Sem necessidade de cálculo de frete
- Visível no painel de pedidos do **admin**
- Filtro no grid de pedidos para buscar por pedidos feitos com essa modalidade
---

## Instalação

1. Copie a pasta `Vendor/StorePickup` para `app/code/Vendor/StorePickup` da instalação do magento atual [esse git].
2. Execute os comandos abaixo no terminal (no diretório raiz do Magento):
 	- php bin/magento module:enable Vendor_StorePickup
 	- php bin/magento setup:upgrade
 	- php bin/magento cache:flush

3. Acesse o painel administrativo e vá até:
  	- Loja > Configuração > Vendas > Métodos de Entrega
	   - Ative a opção "Retirada na Loja" (caso não esteja ativa)

