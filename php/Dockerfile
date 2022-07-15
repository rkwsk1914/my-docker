#ベースイメージの指定
#ベースイメージの指定は FROM で行います。
FROM ubuntu:20.04

#PHP のインストール
#インストールなどの Linux 操作は RUN で行います。
RUN apt update                                       && \
    apt install -y software-properties-common        && \
    LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php && \
    apt update                                       && \
    apt install -y php8.0 php8.0-mysql

#PHP の設定ファイルを追加
#設定ファイルの追加などは COPY で行います。
COPY ./php/mail.ini /etc/php/8.0/cli/conf.d/mail.ini

#msmtp のインストール
#msmtp はメールサーバの SMTP クライアントです。
RUN apt install -yqq msmtp msmtp-mta

#msmtp の設定ファイルを追加
COPY ./php/mailrc /etc/msmtprc

#動作確認用コマンドのインストール
#最後に、curl と ping と ps と vi と tree をインストールしておきます。
#RUN apt-get install -y curl iputils-ping procps vim tree