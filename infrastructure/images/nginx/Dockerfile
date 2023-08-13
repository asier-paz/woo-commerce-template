FROM nginx:1.18.0

ARG HOST_UID=1000
ARG HOST_GID=1000

RUN groupadd user_infra -g$HOST_GID
RUN useradd user_infra -u$HOST_UID -g$HOST_GID -d /home/user_infra -s /bin/bash

# Make the given UID the default user
USER "$HOST_UID:$HOST_GID"